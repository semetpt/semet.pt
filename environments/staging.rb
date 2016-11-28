configure :build do
  config[:url] = "teste.semet.pt"

  activate :robots,
    rules: [
      { user_agent: "*", allow: %w(/) }
    ],
    sitemap: "http://#{config[:url]}/sitemap.xml"
end

activate :deploy do |c|
  c.deploy_method = :git
  c.remote = "git@github.com:semetpt/semet.pt.git"
  c.branch = "gh-pages"
  c.build_before = true
end

