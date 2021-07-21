import wikipediaapi
import sys
import os
global var
var=0
wiki_wiki = wikipediaapi.Wikipedia('en')
page = wiki_wiki.page('International_crisis')
def print_sections(sections, level=0):
    i=0
    for s in sections:
        i = i+1
        if i == 4:
         sys.stdout = open("wikitest.txt", "w")
         print("%s: %s - %s" % ("*" * (level + 1), s.title, s.text[0:1000]))
         print_sections(s.sections, level + 1)
         sys.stdout.close()

def read_last_lines(no_of_lines=1):
    filename = "wikitest.txt"
    var = ''
    file = open(filename, 'r')
    lines = file.readlines()
    last_lines = lines[-no_of_lines:]
    for line in last_lines:
        #print(line)
        var += str(line)
    file.close()
    #print(var)
    filename = "wikitest.txt"
    file = open(filename, 'w')
    file.write(var)
    file.close()

print_sections(page.sections)
read_last_lines(3)


