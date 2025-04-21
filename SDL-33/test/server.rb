# server.rb
require 'webrick'
include WEBrick

root = Dir.pwd
server = HTTPServer.new(
  :Port => 8000,
  :DocumentRoot => root,
  :CGIInterpreter => "/usr/bin/ruby",
  :DirectoryIndex => ['index.html']
)

# Enable .rb as CGI scripts
server.mount("/", HTTPServlet::FileHandler, root, {:FancyIndexing=>true})
server.mount("/reverse_name.rb", HTTPServlet::CGIHandler, "#{root}/reverse_name.rb")

trap("INT") { server.shutdown }
server.start
