#!/usr/bin/env ruby

require 'rubygems'

ENV['GEM_HOME'] = "/home/astjohn/.rvm/gems/ruby-1.9.2-p180@astjohn.ca"
ENV['GEM_PATH'] = "/home/astjohn/.rvm/gems/ruby-1.9.2-p180@astjohn.ca:/home/astjohn/.rvm/gems/ruby-1.9.2-p180@global"

require 'rubygems'
Gem.clear_paths

# END DREAMHOST REQUIREMENTS

# This file is used by Rack-based servers to start the application.

require ::File.expand_path('../config/environment',  __FILE__)
run AstjohnCa::Application

