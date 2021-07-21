import github3
def fun():    
    gh = github3.login(username='',token='')
    repository = gh.repository('Zephyrs3', 'Sentiment_analysis')   
    files_to_upload = ["optweet.csv","docemo.csv","catop.csv"]
    message = "Updated"
    for file_info in files_to_upload:
        with open(file_info, 'rb') as fd:
            contents = fd.read()
        contents_object = repository.file_contents(file_info)
        contents_object.update(message, contents)
