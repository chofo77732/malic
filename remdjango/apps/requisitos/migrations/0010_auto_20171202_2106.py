# -*- coding: utf-8 -*-
# Generated by Django 1.11.7 on 2017-12-03 03:06
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('requisitos', '0009_matriz'),
    ]

    operations = [
        migrations.AlterField(
            model_name='matriz',
            name='trazar',
            field=models.CharField(choices=[('requisito_informacion', 'requisito informacion'), ('requisito_restriccion', 'requisito restriccion'), ('caso_uso', 'caso de uso'), ('requisito_funcional', 'requisito funcional'), ('requisito_no_funcional', 'requisito no funcional')], max_length=30),
        ),
    ]
