from chatterbot import ChatBot
from chatterbot.trainers import ListTrainer
import os

def setup():
    chatbot = ChatBot('Bot',
    storage_adapter='chatterbot.storage.SQLStorageAdapter',
    trainer='chatterbot.trainers.ListTrainer')
    for file in os.listdir('C:/xampp/htdocs/LBC/chatbot/data/'):
        convData = open('C:/xampp/htdocs/LBC/chatbot/data/' + file,'r').readlines()
        chatbot.set_trainer(ListTrainer)
        chatbot.train(convData)
        #print("Training completed")
    

setup()
