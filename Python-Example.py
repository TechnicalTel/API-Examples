import urllib
import urllib2

params = {
    'source': 'SOURCE', #In an internation format without "+" / Plain-text source
    'dest': 'DESTINATION', #In an internation format without "+"
    'message': 'MESSAGE', #SMS message body
    'class0': 'false', #false = disable, true = enable | Flash Message
    'userid': 'XXXXXXX' #Your unique ID that you have received by email on registration
}

url = 'http://www.technicaltel.com/panel/api/sms_send.php?' + urllib.urlencode(params)

request = urllib2.Request(url)
request.add_header('Accept', 'application/json')
response = urllib2.urlopen(request)