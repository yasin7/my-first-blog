from django.db import models
from django.core.urlresolvers import reverse

# Create your models here.


class Work_cat(models.Model):
    cat = ['Comercial', 'Galleria', 'Residential']

class Song(models.Model):
    album = models.ForeignKey(Album, on_delete=models.CASCADE)
    file_type = models.CharField(max_length=10)
    song_title = models.CharField(max_length=250)
    is_favorite = models.BooleanField(default=False)
    def __str__(self):
        return self.song_title
class Sliders(models.Model):
    banner_title = models.CharField(max_length=100)
    banner_img = models.FileField()

    def __str__(self):
        return self.banner_title

class Works(models.Model):
    work_title = models.CharField(max_length=100)
    work_img = models.FileField()
    work_cat = models.CharField(max_length=256, choices=[('Comercial', 'Comercial'), ('Residential', 'Residential'), ('Galleria', 'Galleria')])
    def __str__(self):
        return self.work_title


    