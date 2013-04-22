#!/usr/bin/env ruby

require 'optparse'

if ARGV[0] == nil
  abort("It looks like you need arguments: use -h for help.")
end

options = {}
OptionParser.new do |opts|
  opts.banner = "Usage: sudo ./wper.rb -n project_name -p /Users/name/dir/to/html"

  opts.on("-n", "--name project_name", "Shortname of the project") do |n|
    options[:project_name] = n
  end

  opts.on("-p", "-path /dir/to/www/html" , "Path to the /html folder") do |p|
    options[:path] = p
  end
end.parse!

p 'Writing to Hosts file...'
begin
  file = File.open('/etc/hosts', 'a') {|f| f.puts("127.0.0.1   #{options[:project_name]}.localhost") }
  p 'Done.'
rescue
  p "Couldn't write /etc/hosts file: #{STDIN}"
end

vhost = <<EOS

<VirtualHost *:80>
    ServerAdmin root@localhost
    DocumentRoot "#{options[:path]}"
    ServerName localhost
    ServerAlias #{options[:project_name]}.localhost
    <Directory />
        Options FollowSymLinks
        AllowOverride All
        Order deny,allow
        Allow from all
    </Directory>
</VirtualHost>
EOS

p 'Writing to httpd-vhosts file...'
begin
  File.open('/etc/apache2/extra/httpd-vhosts.conf', 'a') {|f| f.puts(vhost) }
  p 'Done.'
rescue
  p "Couldn't write /etc/hosts file: #{STDIN}"
end

p 'Restarting Apache...'
begin
  `/usr/sbin/apachectl restart`
  p 'Done.'
rescue
  p "Couldn't restart Apache: #{STDIN}"
end

p "All Done. #{options[:project_name]}.localhost/ should work now."
