# [Git](https://git-scm.com/)

## 获得帮助
> git help  
> git help -a  
> git help -g  
> git help add  
> git add --help

##生成密钥
> ssh-keygen -r rsa -C "这里换上你的邮箱"

## 简单配置
> git config --global user.name 'pengminmin'  
> git config --list  
> git config --unset --global user.name  
> git config --list  
> git config --global user.email '540965717@qq.com'  
> git config --global color.ui true

查看gitconfig 文件, ~ 表示当前用户的主目录
> cat ~/.gitconfig  
> git config --global --list

## 别名
> git config --global alias.co checkout  
> git co -b develop  
> cat ~/.gitconfig  
> git co master

另一种添加别名的方式
> vi ~/.bash_profile  
> alias gco='git checkout'  
> source ~/.bash_profile 或者重新打开命令窗口

## 忽略跟踪文件
1.全局忽略系统可能出现的文件
> git config --global core.excludesfile ~/.gitignore_global  
> vi ~/.gitignore_global  
> .DS_Store  
> touch .DS_Store  
> ls -la  
> git status

2.忽略项目级别文件
> vi .gitignore  
> \*.log  
> touch acess.log  
> ls  
> git status

3.如果有些像被忽略的文件已经git add, 已经被git 跟踪了，可以使用 git rm --cache filename 来删除跟踪
> vi demo.css  
> git add .  
> git status  
> git rm --cache demo.css  
> git status  
> vi .gitignore  
> \*.css  
> git status

## 初始化
> git init

## 查看状态
> git status

## 提交修改
1.提交所有修改到暂存区
> git add .

2.提交指定文件的修改到暂存区
> git add filename

3.提交修改到本地仓库  
> git commit -m "modify"

## 查看提交日志
> git log

## 对比区别
1.对比所有区别
> git diff

2.对比制定文件的区别
> git diff filename

3.对比和本地仓库的区别
> git diff --staged

##日志
1.单行显示日志
> git log --oneline

2.复杂点的日志显示
> git log --oneline --decorate --all -10 --graph

## 分支
1.查看状态
> git status

2.查看分支列表
> git branch

3.创建分支
> git branch demo

4.切换分支
> git checkout demo

5.创建并切换到该分支
> git checkout -b demo

6.对比两个分支的区别
> git diff master..demo  
> f键向下翻页，w向上翻页, q键退出

7.fast forward 合并分支
> git merge demo  
> 指当前的分支未做修改，去合并添加了修改的demo分支，结果是demo分支上的修改会添加到当前分支  

8.合并没有冲突的分支
> git merge demo  
> 所有合并分支的结果都是只更新当前分支，不会修改demo分支

9.合并有冲突的分支
> git merge demo  
> 当前分支和demo分支都对某部分代码有修改，会出现CONFLICT(冲突)，需要处理冲突，其中冲突中的head包裹的是当前分支，另一个包裹的是demo分支

10.重命名分支
> git branch -m demo demo-modify

11.删除分支
1.软删除
> git branch -d demo-modify  

2.强制删除
> git branch -D demo-modify
