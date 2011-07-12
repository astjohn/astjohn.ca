module MyPostsHelper

  # return the link with number of comments
  def comment_link(post)
    if BlogPost.comments_allowed?
      str = ""
      if post.comments.any?
        str = pluralize(post.comments.approved.count,
                        t('singular', :scope => 'blog.shared.comments'))
      else
        str = t('none', :scope => 'blog.shared.comments')
      end
      link_to str, blog_post_url(post).to_s + "#comments"
    end
  end

end

