Storyboard format

Every line of a storyboard will have these 2 numbers

0,0

The first number is the type
The second number is the time it occurs at
The rest depends on the type of action

TYPE 0: Basic image, displays an image
0,0,"dango.jpg"

TYPE 1: Play a video, plays a video in the background
1,0,"clannad_ed_01.avi"

TYPE 2: Break
  start   end
2,113499,156200

TYPE 3: Background color, the color to tint the background to, in RGB format
     R   G   B
3,0,163,162,255
