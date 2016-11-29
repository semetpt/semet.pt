configure :build do
  activate :dotenv,
    env: ".env.staging"

  set :google_analytics_tracking_id, ENV["GOOGLE_ANALYTICS_TRACKING_ID"]

  set :url_protocol, "http"
  set :url_host, "teste.semet.pt"
  set :url_root, "#{config[:url_protocol]}://#{config[:url_host]}"

  activate :robots,
    rules: [
      { user_agent: "*", disallow: %w(/) }
    ],
    sitemap: "#{config[:url_root]}/sitemap.xml"

  activate :search_engine_sitemap,
    default_change_frequency: "daily"
end

activate :deploy do |c|
  c.deploy_method = :git
  c.remote = "git@github.com:semetpt/semet.pt.git"
  c.branch = "gh-pages"
  c.build_before = true
end

