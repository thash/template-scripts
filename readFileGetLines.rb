#!/usr/bin/ruby
exit if ARGV == []

file = File.open(ARGV[0])

while line = file.gets
    print line
end
file.close
