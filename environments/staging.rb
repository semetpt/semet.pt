configure :build do
  config[:google_analytics_tracking_id] = "UA-88108121-1";
  config[:url] = "teste.semet.pt"

  set :url_root, "http://#{config[:url]}"

  activate :robots,
    rules: [
      { user_agent: "*", disallow: %w(/) }
    ],
    sitemap: "http://#{config[:url]}/sitemap.xml"

  activate :search_engine_sitemap,
    default_change_frequency: "daily"
end

activate :deploy do |c|
  c.deploy_method = :git
  c.remote = "git@github.com:semetpt/semet.pt.git"
  c.branch = "gh-pages"
  c.build_before = true
end

