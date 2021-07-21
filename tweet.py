import tweepy
import sys
import preprocessor as p
import nltk
from nltk.stem import WordNetLemmatizer
from flask import Flask, request, render_template
punctuations = '''!()-[]{};:'"\,<>./?@#$%^&*_0123456789~'''

nltk.download('wordnet')

import csv
from nltk.tokenize import sent_tokenize, word_tokenize

 # authorization tokens
consumer_key = ""               
consumer_secret = ""
access_key = ""
access_secret = ""

def listtostring(s):            
    str1 = " "
    return (str1.join(s))

#Extract tweets from twitter

class StreamListener(tweepy.StreamListener):
    def on_status(self, status):
        print(status.id_str)        
        is_retweet = hasattr(status, "retweeted_status")

       
        if hasattr(status,"extended_tweet"):
            text = status.extended_tweet["full_text"]
        else:
            text = status.text
 # lemmatisation,punctuation removal,tokenisation
        text1 = listtostring(text)
        text1 = text.replace(",", " ").replace("\n", " ")                  
        text1=p.clean(text1)
        lemmatizer = WordNetLemmatizer()                                   
        lemr = ""
        for word in text1.split():
            lem = (lemmatizer.lemmatize(word, pos="v"))
            lem = (lemmatizer.lemmatize(lem))
            lemr = lemr + lem + " "

        no_punct = ""
        for char in lemr:
            if char not in punctuations:
                no_punct = no_punct + char

        data = word_tokenize(no_punct)
        wordsFiltered = []

        for w in data:
            wordsFiltered.append(w)
            text1=listtostring(wordsFiltered)
        with open("optweet.csv", "a", encoding='utf-8') as f: 
            f.write("%s\n" % (text1))
            import toneanal                                
            toneanal.catfunc()
            import docemo
            docemo.emofunc()

    def on_error(self, status_code):
        print("Encountered streaming error (", status_code, ")")
        sys.exit()

app = Flask(__name__)

@app.route('/')
def hello_world():
        return render_template("homepage.html")

@app.route('/crises1')
def crises1():
        tags = taglist3         
        stream.filter(languages=["en"], track=tags)
        return render_template("index2.html")

@app.route('/crises2')
def crises2():
        tags = taglist1         
        stream.filter(languages=["en"], track=tags)
        return render_template("index2.html")

@app.route('/crises3')
def crises3():
        tags = taglist4         
        stream.filter(languages=["en"], track=tags)
        return render_template("index2.html")

@app.route('/crises4')
def crises4():
        tags = taglist2        
        stream.filter(languages=["en"], track=tags)
        return render_template("index2.html")

@app.route('/form')
def form():
        return render_template("form.html")

if __name__ == "__main__":
   
    auth = tweepy.OAuthHandler(consumer_key, consumer_secret)
    auth.set_access_token(access_key, access_secret)
    api = tweepy.API(auth)


    streamListener = StreamListener()                      
    stream = tweepy.Stream(auth=api.auth, listener=streamListener,tweet_mode='extended')
    with open("optweet.csv", "w", encoding='utf-8') as f:
        f.write("tweets\n")
    taglist1 = ["IndoPakistaniWars"]
    taglist2 = ["KoreanConflict"]
    taglist3 = ["corona","covid 19"]
    taglist4 = ["climate change"]   
    app.run(debug='true')







                    
