configure :build do
  config[:url] = "semet.pt"
end

activate :deploy do |c|
  c.deploy_method = :git
  c.remote = "git@github.com:semetpt/semetpt.github.io.git"
  c.branch = "master"
  c.build_before = true
end
