# example of human-colors in Python
# see https://github.com/vasilisvg/human-colours
# run this script in DrawBot (drawbot.com)

from en_gb import hueName, saturationName, lightnessName

# http://docs.python.org/2/library/colorsys.html#colorsys.rgb_to_hls
def rgb_to_hls(r, g, b):
    maxc = max(r, g, b)
    minc = min(r, g, b)
    l = (minc+maxc)/2.0
    if minc == maxc: return 0.0, l, 0.0
    if l <= 0.5: s = (maxc-minc) / (maxc+minc)
    else: s = (maxc-minc) / (2.0-maxc-minc)
    rc = (maxc-r) / (maxc-minc)
    gc = (maxc-g) / (maxc-minc)
    bc = (maxc-b) / (maxc-minc)
    if r == maxc: h = bc-gc
    elif g == maxc: h = 2.0+rc-bc
    else: h = 4.0+gc-rc
    h = (h/6.0) % 1.0
    return h, l, s

for i in range(10):
    # make two random colors
    c1 = random(), random(), random()
    c2 = random(), random(), random()
    # draw background
    newPage(744, 648)
    fill(*c2)
    rect(0, 0, width(), height())
    # draw rectangle
    fill(*c1)
    w, h = width()/2, height()/2
    rect(w/2, h/2, w, h)
    # convert colors to HSB
    h1, l1, s1 = rgb_to_hls(c1[0], c1[1], c1[2])
    h2, l2, s2 = rgb_to_hls(c2[0], c2[1], c2[2])
    # generate human color names
    t = 'a %s, %s, %s rectangle\non a %s, %s %s background' % \
        (hueName(h1*360), saturationName(s1*100), lightnessName(l1*100), \
        hueName(h2*360), saturationName(s2*100), lightnessName(l2*100))
    # draw text
    fill(0)
    fontSize(18)
    textBox(t, (20, 20, width()-20, 50))
