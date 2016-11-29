module OpenGraphHelpers
  def og_url
    current_page.data.og&.url || current_page_url
  end
end
