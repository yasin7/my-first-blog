# -*- coding: utf-8 -*-
# Generated by Django 1.11.2 on 2017-07-10 17:05
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('music', '0005_works'),
    ]

    operations = [
        migrations.CreateModel(
            name='Work_cat',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
            ],
        ),
        migrations.AddField(
            model_name='works',
            name='myfield',
            field=models.CharField(choices=[(b'green', b'green'), (b'red', b'red')], default=1, max_length=256),
            preserve_default=False,
        ),
    ]
