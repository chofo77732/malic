# -*- coding: utf-8 -*-
# Generated by Django 1.11.7 on 2017-12-04 03:12
from __future__ import unicode_literals

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
        ('projecto', '0003_projecto_fecha'),
    ]

    operations = [
        migrations.CreateModel(
            name='diagrama_secuencia',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('nombre', models.CharField(max_length=50)),
                ('diagrama', models.FileField(blank=True, null=True, upload_to=b'')),
                ('descripcion', models.TextField()),
                ('comentario', models.TextField()),
                ('fecha_creacion', models.DateTimeField(auto_now_add=True)),
                ('fecha_actualizacion', models.DateTimeField(auto_now=True)),
                ('projecto', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to='projecto.Projecto')),
            ],
        ),
    ]
