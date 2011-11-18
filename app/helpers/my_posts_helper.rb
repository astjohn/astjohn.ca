module MyPostsHelper

  # return the link with number of comments
  def comment_link(post)
    str = ""
    if BlogPost.comments_allowed?
#      if post.comments.any?
#        str = pluralize(post.comments.approved.count,
#                        t('singular', :scope => 'blog.shared.comments'))
#      else
#        str = t('none', :scope => 'blog.shared.comments')
#      end
      str += image_tag "blog/dialog.png", :alt => "comments", :class => "comments"
      str += link_to str, blog_post_url(post).to_s + "#disqus_thread",
                   {"data-disqus-identifier" => "astjohn.ca_blog_#{post.id}"}
    end
    raw(str).html_safe
  end

end
