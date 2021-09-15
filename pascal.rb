each_cons = ->(ary) {
  (ary.size < 2) ? [] : [ary[0] + ary[1]] + each_cons.(ary.drop(1))
}
pascal = ->(n) {n.zero? ? [1] : [1] + each_cons.(pascal.(n - 1)) + [1]}

n = 10  #三角形の階層
n.times {|i| puts pascal.(i).join(" ").center(30)}