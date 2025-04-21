#!/usr/bin/env ruby

require 'cgi'

cgi = CGI.new

puts "Content-Type: text/html\r\n\r\n"  # Correct casing, carriage-return + newline

first_name = cgi['first_name']
last_name  = cgi['last_name']

full_name = "#{first_name} #{last_name}"
reversed = full_name.reverse

puts <<-HTML
<html>
  <head><title>Reversed Name</title></head>
  <body>
    <h2>Reversed Name:</h2>
    <p>#{reversed}</p>
  </body>
</html>
HTML
