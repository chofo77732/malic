# -*- coding: utf-8 -*-
# Generated by Django 1.11.7 on 2017-12-02 06:57
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('requisitos', '0002_objetivo'),
    ]

    operations = [
        migrations.AlterField(
            model_name='objetivo',
            name='autores',
            field=models.ManyToManyField(blank=True, to='requisitos.actor'),
        ),
    ]