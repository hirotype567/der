std::vector<int> v{ 21, 1, 3, 8, 13, 1, 5, 2 };
std::vector<int> v2 = v;
std::sort(std::begin(v2), std::end(v2));
      
auto first = std::begin(v2);
std::advance(first, 2);
auto last = first;
std::advance(last, std::size(v2) - 4);
 
v2.erase(last, std::end(v2));
v2.erase(std::begin(v2), first);
