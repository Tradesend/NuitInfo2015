from django.conf.urls import url

from . import views
from .models import Type

filters = '(' + ')|('.join([x.name.lower() for x in Type.objects.all()]) + ')'
sorters = '(' + ')|('.join(['latest', 'hottest']) + ')'

urlpatterns = [
    url(r'^$', views.index, name='index'),

    # /Crisis/events/
    url(r'^events/$', views.events, name='events'),
    # /Crisis/attentat/events/
    url(r'^(?P<filters>(' + filters + '))/events/$', views.events, name='events'),
    # /Crisis/latest/events/
    url(r'^(?P<sorters>(' + sorters + '))/events/$', views.events, name='events'),
    # /Crisis/latest/attentat/events/
    url(r'^(?P<sorters>(' + sorters + '))/(?P<filters>(' + filters + '))/events/$', views.events, name='events'),

    # /Crisis/34/event/
    url(r'^(?P<event_id>[0-9]+)/event/$', views.event, name='event'),
]
