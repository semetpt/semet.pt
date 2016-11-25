configure :build do
  config[:url] = "teste.semet.pt"
end

activate :deploy do |c|
  c.deploy_method = :git
  c.remote = "git@github.com:semetpt/semet.pt.git"
  c.branch = "gh-pages"
  c.build_before
end

