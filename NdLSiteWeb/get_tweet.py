from HTMLParser import HTMLParser
import urllib
import time
page=urllib.urlopen('http://topsy.com/s?q=attentat&window=h')
strpage=page.read()

i = strpage.find("<span class=\"total-number\">")

print(i)

# print strpage[strpage.find("<span class=\"total-number\">"):10]
time.sleep(6)
