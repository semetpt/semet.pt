module CurrentPageHelpers
  def current_page_url
    path = current_page.path.gsub /index.html$/, ""
    "#{config[:url_root]}/#{path}"
  end
end
