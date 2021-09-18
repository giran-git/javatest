sum = 0
n0 = 1.step do |n|
  sum += 1r / n
  break n if sum > 10
end

puts n0, sum.to_f