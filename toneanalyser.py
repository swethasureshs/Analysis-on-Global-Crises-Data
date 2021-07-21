import json
import csv
import urllib3
urllib3.disable_warnings(urllib3.exceptions.InsecureRequestWarning)
from ibm_watson import NaturalLanguageUnderstandingV1
from ibm_cloud_sdk_core.authenticators import IAMAuthenticator
from ibm_watson.natural_language_understanding_v1 import Features, CategoriesOptions
from ibm_watson import IAMTokenManager
from ibm_cloud_sdk_core.authenticators import BearerTokenAuthenticator
ct=0
def catfunc():


    authenticator = IAMAuthenticator('')
    natural_language_understanding = NaturalLanguageUnderstandingV1(
        version='',
        authenticator=authenticator
    )

    iam_token_manager = IAMTokenManager(apikey='')
    token = iam_token_manager.get_token()

    authenticator1 = BearerTokenAuthenticator(token)
    natural_language_understanding1 = NaturalLanguageUnderstandingV1(version='',
                            authenticator=authenticator1)
    natural_language_understanding.set_service_url('')
    natural_language_understanding.set_disable_ssl_verification(True)
   
    x = 0
    global ct
    intext = []
    with open("optweet.csv") as file:
        data = list(csv.reader(file))


    strin = " ".join(str(x) for x in data)  
    response = natural_language_understanding.analyze(text=strin, language='en', features=Features(categories=CategoriesOptions(limit=3),)).get_result()

    cat1 = response['categories']                  
    dic1 = cat1[0]
   
    if ct == 0:
        ct = 1
        with open('catop.csv', 'w', newline='') as out_file:
            writer = csv.writer(out_file)
            writer.writerow(["cat_score", "cat_label"])
            writer.writerow([dic1['score'], dic1['label']])
    else:
        with open('catop.csv', 'a', newline='') as out_file:
            writer = csv.writer(out_file)
            writer.writerow([dic1['score'], dic1['label']])
           



