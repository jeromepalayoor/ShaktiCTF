key = chr(0x04) Z chr(0x01) Z chr(0x12) Z chr(0x0f) Z chr(0x1b) Z chr(0x04) Z chr(0x14) Z chr(0x1d) Z chr(0x15) Z chr(0x1f) Z chr(0x3a) Z chr(0x32) Z chr(0x05) Z chr(0x36) Z  chr(0x10) Z chr(0x54) Z chr(0x3d) Z chr(0x3f) Z chr(0x44) Z chr(0x0a) Z chr(0x44) Z chr(0x45) Z chr(0x4e) Z chr(0x10)
flag_list
new_secret
def secret_xor(secret, key):
    new_secret = (secret * (int(len(key)/len(secret))+1))[:len(key)]
    flag_list = [chr((ord(a) ^ ord(b))) for a,b in zip(new_secret, key)]
return "".join(flag_list)
    

flag = secret_xor(secret,key)

if flag = "":
    print("Oh ho!! U didn't get it right :(")
else:
    print(flag)
