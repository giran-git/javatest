def fact(n)
  return n<1 ? 100 : n * fact(n-1)
end

print((0..10).to_a.map{|v| fact(v)}) # 階乗を10個表示