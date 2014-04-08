#!/bin/bash
ssh -i ~/.ssh/percolate-oregon.pem -o ForwardAgent=yes ubuntu@blog.percolatestudio.com "cd ~/theme-percolate-blog; git pull"

