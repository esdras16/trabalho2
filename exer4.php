<?php
# -*- coding: latin-1 -*
l = str(input('Digite uma letra: ').lower())
if l == 'a' or l == 'e' or l == 'i' or l == 'o' or l == 'u':
    print('A letra',l,'é vogal')
else:
    print('A letra',l,'é consoante')
