configure :build do
  config[:url] = "semet.pt"

  activate :robots,
    rules: [
      { user_agent: "*", disallow: %w(/) }
    ],
    sitemap: "http://#{config[:url]}/sitemap.xml"
end

activate :deploy do |c|
  c.deploy_method = :git
  c.remote = "git@github.com:semetpt/semetpt.github.io.git"
  c.branch = "master"
  c.build_before = true
end
