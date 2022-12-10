Title: Eazy_peaZy

Description:
```
Who knew encryption could be so simple?

Author: Rees
```

Files: [eazy_peazy_474b9cb8-20ab-4978-8409-0a0e5443b312.py](https://github.com/Coder-Here/ShaktiCTF/blob/main/Cryptography/Eazy_peaZy/eazy_peazy_474b9cb8-20ab-4978-8409-0a0e5443b312.py)

```py
flag='shaktictf{#####REDACTED#####}'
s=''
for i in flag:
    s+=chr((ord(i)-15))
print(base64.b64encode(bytes(s,'utf-8')))

#b'ZFlSXGVaVGVXbFRjamFlIVAiZFBkZmEkY1BWUmtqampqampQWFQlJCNlYyYnWCVlYyYlbg=='
```

This looks like a caesar shift cipher, but shifting backwards in the entire ascii table by 15 characters and then base64 encoding it.

After base64 decoding that string, I got ```dYR\eZTeWlTcjae!P"dPdfa$cPVRkjjjjjjPXT%$#ec&'X%ec&%n```.

I wrote a quick script to get back the flag by doing everything the same except adding 15 instead of subtracting it.

```py
enc = 'dYR\eZTeWlTcjae!P"dPdfa$cPVRkjjjjjjPXT%$#ec&\'X%ec&%n'

s = ''
for i in enc:
    s+=chr(ord(i)+15)
print(s)
```

Flag: shaktictf{crypt0_1s_sup3r_eazyyyyyy_gc432tr56g4tr54}
