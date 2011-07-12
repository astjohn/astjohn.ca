###########
# Bundler #
###########
require "bundler/capistrano"

##############
# REPOSITORY #
##############
set :scm, :git
set :application, "astjohn.ca"
set :repository,  "git://github.com/astjohn/astjohn.ca.git"
set :branch, "master"
set :deploy_via, :remote_cache
set :keep_releases, 3
set :user, "astjohn"
set :domain, "michaelkelly.dreamhost.com"
set :group, "astjohn"
set :use_sudo, false

set :deploy_to, "/home/astjohn/webroots/astjohn.ca"
set :rails_env, "production"

###############
# SSH OPTIONS #
###############
default_run_options[:pty] = true
set :ssh_options, { :user => user, :forward_agent => true }
ssh_options[:keys] = %w(/home/adam/.ssh/astjohn_ssh) # If you are using ssh_keys

role :web, domain
role :app, domain
role :db, domain, :primary => true # This is where Rails migrations will run



# If you are using Passenger mod_rails uncomment this:
namespace :deploy do
  task :start do ; end
  task :stop do ; end
  task :restart, :roles => :app, :except => { :no_release => true } do
    run "#{try_sudo} touch #{File.join(current_path,'tmp','restart.txt')}"
  end
end
after "deploy:symlink", "deploy:restart"

# ==============================
# Shared Folders
# ==============================

namespace :shared_folders do

  desc <<-EOD
    Creates the shared folders unless they exist
    and sets the proper permissions.
  EOD
  task :setup, :except => { :no_release => true } do
    dirs = shared_folders.map { |d| File.join(shared_path, d) }
    run "#{try_sudo} mkdir -p #{dirs.join(' ')} && #{try_sudo} chmod g+w #{dirs.join(' ')}"
  end

  desc <<-EOD
    [internal] Creates the symlink to shared folder
    for the most recently deployed version.
  EOD
  task :symlink, :except => { :no_release => true } do
    fetch(:shared_folders).each do |folder|
      run "rm -rf #{File.join(release_path, folder)}"
      run "ln -nfs #{File.join(shared_path, folder)} #{File.join(release_path, folder)}"
    end
  end

  desc <<-EOD
    [internal] Computes directory paths
    and registers them in Capistrano environment.
  EOD
  task :register_dirs do
    set :shared_folders,    %w(public/system/)
    set :shared_children, fetch(:shared_children) + fetch(:shared_folders)
  end

  after       "deploy:finalize_update", "shared_folders:symlink"
  on :start,  "shared_folders:register_dirs"

end

namespace :shared_files do
  desc <<-EOD
    Creates symbolic links to shared files
  EOD
  task :symlink do
    run "ln -nfs #{File.join(shared_path, 'database.yml')} #{File.join(release_path, 'config/database.yml')}"
  end

  after "deploy:finalize_update", "shared_files:symlink"
end

#######
# RVM #
#######

# Add RVM's lib directory to the load path.
$:.unshift(File.expand_path('./lib', ENV['rvm_path']))
require "rvm/capistrano"
set :rvm_ruby_string, 'ruby-1.8.7-p334@astjohn.ca'
set :rvm_type, :user
after "deploy:update_code" do
  run "rvm rvmrc trust #{current_release}"
end

