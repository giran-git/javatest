a = 1
b = 3
c = 7
n = 0
while n < 9997
  d = a + b + c
  a = b
  b = c
  c = d
  n += 1
end

puts c