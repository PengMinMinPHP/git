# [Git](https://git-scm.com/)

## 获得帮助
> git help  
> git help -a  
> git help -g  
> git help add  
> git add --help

## 简单配置
> git config --global user.name 'pengminmin'  
> git config --list  
> git config --unset --global user.name  
> git config --list  
> git config --global user.email '540965717@qq.com'  
> git config --global color.ui true

查看gitconfig 文件, ~ 表示当前用户的主目录
> cat ~/.gitconfig

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

##
