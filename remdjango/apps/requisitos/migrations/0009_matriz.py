# -*- coding: utf-8 -*-
# Generated by Django 1.11.7 on 2017-12-03 02:52
from __future__ import unicode_literals

import apps.requisitos.models
from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('projecto', '0002_auto_20171112_1849'),
        ('requisitos', '0008_requisito_funcional_requisito_no_funcional'),
    ]

    operations = [
        migrations.CreateModel(
            name='matriz',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('nombre', models.CharField(max_length=50)),
                ('version', models.IntegerField()),
                ('fuentes', models.CharField(max_length=100)),
                ('trazar', models.CharField(choices=[(apps.requisitos.models.requisito_informacion, 'requisito informacion'), (apps.requisitos.models.requisito_restriccion, 'requisito restriccion'), (apps.requisitos.models.caso_uso, 'caso de uso'), (apps.requisitos.models.requisito_funcional, 'requisito funcional'), (apps.requisitos.models.requisito_no_funcional, 'requisito no funcional')], max_length=30)),
                ('comentario', models.TextField()),
                ('fecha_creacion', models.DateTimeField(auto_now_add=True)),
                ('fecha_actualizacion', models.DateTimeField(auto_now=True)),
                ('autores', models.ManyToManyField(blank=True, to='requisitos.actor')),
                ('projecto', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='projecto.Projecto')),
            ],
        ),
    ]
