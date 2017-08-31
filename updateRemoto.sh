#!/bin/bash
# Atualizar Repositório Remoto

git remote add upstream https://github.com/denilsonfag/programacao-internet.git
git fetch upstream
git merge upstream/master
git push