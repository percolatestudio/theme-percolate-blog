#!/bin/bash
ssh -i ~/.ssh/percolate-oregon.pem -o ForwardAgent=yes ubuntu@newblog.percolatestudio.com "cd ~/theme-percolate-blog; git pull"

