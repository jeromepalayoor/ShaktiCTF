Title: Love Calculator

Description:
```
Here is something you always wanted to stumble upon, A Love calculator...Go on and check your luck.

Author - k1n0r4
```

Files: [chall_12bffcb2-92ed-4099-b00c-3bb5e66962d6](https://github.com/Coder-Here/ShaktiCTF/blob/main/Reversing/Love%20Calculator/chall_12bffcb2-92ed-4099-b00c-3bb5e66962d6)

Do basic file checks.

![image](https://user-images.githubusercontent.com/63996033/206861038-48d9b243-0ba3-4d4e-9f5e-fe8e8cb77cb4.png)

Then open it in ghidra.

![image](https://user-images.githubusercontent.com/63996033/206861131-1af13b6d-90d6-44ee-9e68-50766baf1abe.png)

This seems to be the check passcode function. I renamed the variables. The passkey seemed to be the flag also.

![image](https://user-images.githubusercontent.com/63996033/206861229-4b4ccb3f-1c5a-411e-8d1c-b8c6e02077e8.png)

This part creates the passkey.

![image](https://user-images.githubusercontent.com/63996033/206861264-43efaffa-f0f0-4db8-8db9-1e583064969f.png)

I renamed it so that it is more understandable. The flag/passkey is in hex, I used [cyberchef](https://gchq.github.io/CyberChef/#recipe=From_Hex('Auto')&input=MHg3NDMzNmMKMHg3MzVmMzUKMHg3NjZjMzAKMHg1ZjMzCjB4NzIzMDZkCjB4NjM1ZjMzCjB4NmM2YzM0NjgKMHg2NzZlMzMKMHg3MzMzCgoweDAwMDAwMDAKCjZjMzM3NDM1NWY3MzMwNmM3NjMzNWY2ZDMwNzIzMzVmNjM2ODM0NmM2YzMzNmU2NzMzNzMK) to decode it.

Since it is little endian, I swapped the endianness manually to get the flag/passkey.

And to confirm, I run the challenge with that same passkey.

![image](https://user-images.githubusercontent.com/63996033/206863872-1c7da0b0-96de-4ddf-9b37-2733e0a1135c.png)

Flag: shaktictf{l3t5_s0lv3_m0r3_ch4ll3ng3s}
