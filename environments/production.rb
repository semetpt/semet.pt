configure :build do
  config[:google_analytics_tracking_id] = "UA-88104955-1";
  config[:url] = "semet.pt"

  set :url_root, "http://#{config[:url]}"

  activate :robots,
    rules: [
      { user_agent: "*", disallow: %w(/) }
    ],
    sitemap: "http://#{config[:url]}/sitemap.xml"

  activate :search_engine_sitemap
end

activate :deploy do |c|
  c.deploy_method = :git
  c.remote = "git@github.com:semetpt/semetpt.github.io.git"
  c.branch = "master"
  c.build_before = true
end
