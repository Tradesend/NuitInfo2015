# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Crisis', '0001_initial'),
    ]

    operations = [
        migrations.AddField(
            model_name='type',
            name='en_name',
            field=models.CharField(default='def', max_length=50),
            preserve_default=False,
        ),
        migrations.AddField(
            model_name='type',
            name='fr_name',
            field=models.CharField(default='def', max_length=50),
            preserve_default=False,
        ),
    ]
