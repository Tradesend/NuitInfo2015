from django.db import models

# Create your models here.
class Type(models.Model):
    name = models.CharField(max_length=50)
    fr_name = models.CharField(max_length=50)
    en_name = models.CharField(max_length=50)

    def __str__(self):
        return self.name
    
class Event(models.Model):
    eType = models.ForeignKey(Type)
    name = models.CharField(max_length=50)
    desc = models.CharField(max_length=250)
    date = models.DateTimeField('date')    
    intensity = models.IntegerField(default=0)
    # add loc

    def __str__(self):
        return self.name
