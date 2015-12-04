from django.http import HttpResponse
from django.template import RequestContext, loader
from django.shortcuts import render

from .models import *

# Create your views here.
def index(request):
    return HttpResponse("Hello, world. You're at the polls index.")

def events(request, filters = '', sorters = ''):
    type_list = Type.objects.all()
    template = loader.get_template('Crisis/events.html')
    context = RequestContext(request, {
        'type_list': type_list,
    })
    return HttpResponse(template.render(context))

def event(request, event_id):
    return HttpResponse("Hello, world. You're at the event" + event_id + ".")

