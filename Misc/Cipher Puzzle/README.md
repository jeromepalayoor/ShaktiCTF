Title: Cipher Puzzle

Description:
```
"Each scar's is a cipher rimmed with old barbs and landmines, protecting its truth." - J.L.B. Smith

Author - Ramya
```
Files: [cipher_puzzle_chall_fb42e257-54a5-42e3-9039-09406ad7dc38.txt.txt](https://github.com/Coder-Here/ShaktiCTF/blob/main/Misc/Cipher%20Puzzle/cipher_puzzle_chall_fb42e257-54a5-42e3-9039-09406ad7dc38.txt.txt)

```
----- .---- .---- .---- ----- .---- ----- .---- / ----- .---- .---- .---- ----- ----- .---- ----- / ----- .---- .---- ----- .---- ----- ----- .---- / ----- .---- .---- ----- ----- .---- .---- .---- / ----- .---- .---- .---- .---- ----- .---- ----- / ----- .---- .---- .---- ----- .---- .---- .---- / ----- .---- .---- .---- ----- ----- .---- .---- / ----- .---- .---- .---- .---- ----- .---- ----- / ----- .---- .---- ----- .---- ----- ----- ----- / ----- .---- .---- .---- .---- ----- .---- .---- / ----- ----- .---- .---- ----- .---- ----- .---- / ----- .---- .---- .---- ----- ----- .---- ----- / ----- ----- .---- .---- ----- .---- ----- ----- / ----- .---- .---- ----- ----- .---- .---- .---- / ----- ----- .---- .---- ----- .---- .---- .---- / ----- .---- .---- .---- ----- .---- .---- .---- / ----- .---- ----- .---- ----- ----- .---- .---- / ----- ----- .---- .---- ----- ----- ----- ----- / ----- .---- .---- .---- ----- .---- .---- ----- / ----- .---- ----- .---- ----- ----- ----- .---- / ----- ----- .---- .---- ----- ----- ----- ----- / ----- .---- ----- .---- ----- ----- ----- ----- / ----- ----- .---- .---- ----- .---- ----- .---- / ----- ----- .---- .---- ----- ----- .---- .---- / ----- .---- .---- .---- .---- .---- ----- .----
```

The contents of the file look like a morse code, I translated it from morse code using [this tool](https://www.dcode.fr/morse-code).

![image](https://user-images.githubusercontent.com/63996033/206856547-a772a25f-d57a-4c44-87db-a3057e8681ce.png)

The resulting text is just binary, I converted it to ascii using [this tool](https://www.dcode.fr/ascii-code).

![image](https://user-images.githubusercontent.com/63996033/206857146-87c7e82e-5337-4033-adce-1ced6cf6d3e4.png)

Result: ```	urigzwszh{5r4g7wS0vQ0P53}```, but it is not in flag format. I tried the standard cryptographic encryption thats possible like caesar cipher, xor, substitution, rot13. But only Affine cipher worked.

I used [this tool](https://www.dcode.fr/affine-cipher).

![image](https://user-images.githubusercontent.com/63996033/206857280-932546f4-7acb-40d0-ab31-e96eea2e2d56.png)

Flag: shaktictf{5h4k7iC0nM0R53}
