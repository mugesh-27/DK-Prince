import math

f = open("inp_k_near_discrete_unweighted.txt","r")

inp_data = []
inp_cat = []
count = 0

while True:
    data = f.readline().strip()
    
    if data == "":
        break
    
    if count > 0:
        inp_data.append([float(i) for i in data.split()[1:-1]])
        
        inp_cat.append(data[-1])
    
    count += 1

#print(inp_data,inp_cat)
count -= 1

q_data = inp_data[-1]
del inp_data[-1]
del inp_cat[-1]

row = count -1
col = len(inp_data[0])
dist = [0] * row

temp1 = 0


for i in range(row):
    for j in range(col):
        temp = q_data[j] - inp_data[i][j]
        temp1 += pow(temp,2)
    #print(temp)
    dist[i] = [round(math.sqrt(temp1),4),i]
    temp1 = 0

dist.sort()

k = int(input("Enter the value of K:"))

l_count = 0
c_count = 0

for i in range(k):
    if 'l' == inp_cat[dist[i][1]]:
        l_count += 1
    
    if 'c' == inp_cat[dist[i][1]]:
        c_count += 1

argmax = [l_count,c_count]

if argmax[0] > argmax[1]:
    q_data.append('l')
else:
    q_data.append('c')
    
print(q_data)